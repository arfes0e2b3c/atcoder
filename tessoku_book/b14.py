import bisect


def func():
    n, k = map(int, input().split())
    arr_a = list(map(int, input().split()))
    zenhan = arr_a[:n//2]
    kouhan = arr_a[n//2:]

    zenhan_sum_list = make_sum_list(zenhan)
    kouhan_sum_list = make_sum_list(kouhan)

    zenhan_sum_list.sort()
    kouhan_sum_list.sort()

    for i in range(len(zenhan_sum_list)):
        ans = k - zenhan_sum_list[i]

        left = 0
        right = len(kouhan_sum_list)

        while left < right:
            mid = (left + right) // 2
            if (kouhan_sum_list[mid] == ans):
                print("Yes")
                return
            elif (kouhan_sum_list[mid] < ans):
                left = mid + 1
            else:
                right = mid
    print("No")


def make_sum_list(arr):
    sum_list = []
    for i in range(2**len(arr)):
        bin_list = []
        tmp = i
        while (True):
            if (tmp == 1 or tmp == 0):
                bin_list.append(tmp)
                break
            elif (tmp % 2 == 0):
                bin_list.append(0)
            else:
                bin_list.append(1)
            tmp = tmp // 2
        sum = 0
        for j in range(len(bin_list)):
            if (bin_list[j] == 1):
                sum += arr[j]
        sum_list.append(sum)
    return sum_list


if __name__ == '__main__':
    func()
