def func():
    n = int(input())
    arr_h = list(map(int, input().split()))

    dp = [0]

    for i in range(1, len(arr_h)):
        cost_one = pow(10, 9) + 1
        cost_two = pow(10, 9) + 1
        if i > 0:
            cost_one = dp[i - 1] + abs(arr_h[i] - arr_h[i - 1])
        if i > 1:
            cost_two = dp[i - 2] + abs(arr_h[i] - arr_h[i - 2])
        dp.append(min(cost_one, cost_two))
    print(dp[n-1])

    # n -= 1

    # tmp_cost = 0
    # tmp_position = 0

    # result = jump(n, arr_h, tmp_cost, tmp_position, 0)
    # print(result)


# def jump(n, arr_h, tmp_cost, tmp_position, jump_length):
#     tmp_cost += abs(arr_h[tmp_position] - arr_h[tmp_position + jump_length])
#     tmp_position += jump_length

#     result_one = pow(10, 9) + 1
#     result_two = pow(10, 9) + 1

#     if (n - tmp_position >= 1):
#         result_one = jump(n, arr_h, tmp_cost, tmp_position, 1)
#     if (n - tmp_position >= 2):
#         result_two = jump(n, arr_h, tmp_cost, tmp_position, 2)
#     if (tmp_position == n):
#         return tmp_cost

#     return min(result_one, result_two)


if __name__ == '__main__':
    func()
